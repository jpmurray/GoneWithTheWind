<select {!! $attributes->merge(['class' => 'mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm']) !!}>
    @foreach($items as $item)
    <option value={{ $item }} @if($chosen !== false && $chosen == $item) selected @endif>{{ ucfirst($item) }}</option>
    @endforeach
</select>