<x-app-dashboard-layout title="Dashboard">
    <div class="col-12">
      <x-widget/>
    </div>
    <div class="col-12 mt-4">
        <div class="card">
            <div class="card-body">
                <h3>Hi, {{ Auth::user()->name }}</h3>
                
            </div>
        </div>
    </div>
</x-app-dashboard-layout>
