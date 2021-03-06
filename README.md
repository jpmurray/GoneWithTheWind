# Gone with the (Tail)Wind

Packages that provides (what I think is) blade components that plays well with the basic Tailwind UI offered by Laravel (in Breeze, for example).

This was made in an effort to try and learn Tailwind. Not that I want to learn it, mind you, I'd still prefer to be using Bootstrap out of the box! But I'm a prototyper, and it seems I have to take a small time in my schedule so I can _go with the wind_ of what's now offered by default in Laravel.

## Components and usage

### Cards components

#### Table

```blade
<x-with-wind-cards::table
    model="user"
    :data="$users"
    :show="['name']"
    :actions="['edit']"
/>
```

**Attributes**:

- `model` asks for the singular model name to generates things like routes (ex: `route('users.index'))
- `data` asks for the data to display in table, goes well with an eloquent collection or a paginated collection.
- `show` asks what column to show from the data (ex: `['name', 'created_at']`)
- `actions` defaults to null, but if provided, will add an `action` column with specified ones. For now, supports `['edit', 'delete']`

### Forms components

#### Label

```blade
<x-with-wind-forms::label for="name">Name</<x-with-wind-forms::label>
```

<hr>

#### Input

```blade
<x-with-wind-forms::input id="name" type="text" name="name" :value="old('name')" required />
```

<hr>

#### Select

```blade
<x-with-wind-forms::select id="type" name="type" autocomplete="type" :choices="['Label' => 'value']" chosen="value" />
```

**Attributes**:

- `choices` asks for an associative array of `label => value`to populate the select element
- `chosen` asks for what should be selected in the choices, if necessary.

<hr>

#### Submit button

```blade
<x-with-wind-forms::submit>Save</<x-with-wind-forms::submit>
```
