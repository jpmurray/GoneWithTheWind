# Gone with the (Tail)Wind

Packages that provides (what I think is) blade components that plays well with the basic Tailwind UI offered by Laravel (in Breeze, for example).

This was made in an effort to try and learn Tailwind. Not that I want to learn it, mind you, I'd still prefer to be using Bootstrap out of the box! But I'm a prototyper, and it seems I have to take a small time in my schedule so I can _go with the wind_ of what's now offered by default in Laravel.

## Components and usage

### Table component

Attributes:

- `model` asks for the singular model name to generates things like routes (ex: `route('users.index'))
- `data` asks for the data to display in table, goes well with an eloquent collection
- `show` asks what column to show from the data (ex: `['name', 'created_at']`)
- `actions` defaults to null, but if provided, will add an `action` column with specified ones. For now, supports `['edit', 'delete']`

```
<x-with-wind::table
    model="user"
    :data="$users"
    :show="['name']"
    :actions="['edit']"
/>
```
