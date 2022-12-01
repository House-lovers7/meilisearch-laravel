<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Search') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
                  <form action="/search" method="get" class="space-y-5 mb-6">
                    <x-text-input id="query" name="query" type="search"
                    placeholder="Search for something..." value="{{ request()->get('query')}}" class="block w-full" />
                    <x-primary-button>Search</x-primary-button>
                  </form>

                  @if ($results)
                  <div class="space-y-4">
                    @if ($results->count())
                        @foreach ($results as $result)
                        <div>
                           <h1 class="text-lg font-semibold">
                            {{ $result->title}}
                           </h1>
                           <p>{{ $result->teaser  }}</p>
                        </div>
                        @endforeach

                    @else
                    <p>No results found</p>

                    @endif


                  </div>
                  @endif

             </div>
          </div>
      </div>
  </div>
</x-app-layout>
