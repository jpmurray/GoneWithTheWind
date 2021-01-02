<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
                @foreach($show as $item)
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ ucfirst($item) }}
                    </th>
                @endforeach
                @if($actions !== null)
                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
                @endif
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach($items as $item)
            <tr>
                @foreach($show as $index)
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                        {{ $item[$index] }}
                        </div>
                    </td>
                @endforeach

                @if($actions !== null)
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        @foreach($actions as $action)
                            @switch($action)
                                @case('edit')
                                    <a href="{{ route("{$route_prefix}.edit", $item) }}" class="text-indigo-600 hover:text-indigo-900 {{ !$loop->last ? "pr-4": null }}">{{ __('Edit') }}</a>
                                    @break
                                
                                @case('delete')
                                    <a href="{{ route("{$route_prefix}.delete", $item) }}" class="text-indigo-600 hover:text-indigo-900 {{ !$loop->last ? "pr-4": null }}">{{ __('Delete') }}</a>
                                    @break
                            @endswitch
                        @endforeach
                    </td>
                @endif
            </tr>
            @endforeach
          </tbody>
        </table>
        @if($paginated)
          {{ $items->links() }}
        @endif
      </div>
    </div>
  </div>
</div>