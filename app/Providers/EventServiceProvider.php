<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Event::listen(\Slides\Saml2\Events\SignedIn::class, function (\Slides\Saml2\Events\SignedIn $event) {
            $messageId = $event->getAuth()->getLastMessageId();
            
            // your own code preventing reuse of a $messageId to stop replay attacks
            $samlUser = $event->getSaml2User();
            
            $userData = [
                'id' => $samlUser->getUserId(),
                'attributes' => $samlUser->getAttributes(),
                'assertion' => $samlUser->getRawSamlAssertion()
            ];
            
            $getEmailAzure = $userData['attributes']['http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress']['0'];

            $userCheck = User::where('email', $getEmailAzure)->first();

            if ($userCheck) {
                // Menggunakan Auth facade untuk login
                Auth::loginUsingId($userCheck->id);
                return redirect()->route('home');
            } else {
                return redirect()->route('register');
            }
        });
        
        Event::listen('Slides\Saml2\Events\SignedOut', function (SignedOut $event) {
            Auth::logout();
            Session::save();
        });
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
