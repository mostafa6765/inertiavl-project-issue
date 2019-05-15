inertiavl-project-issue

# laravel router

```php
Route::get('/contact', function () {
  Khead::setTitle('acontact');
  $event = "ok this is event";
  return Inertia::render('Contact', ['eventi' => $event])
                ->with(['meta_description' => $event]);
});
```

# inertia vue

```html
<inertia-link href="/contact">contact</inertia-link>
```html

* `when I click contact route that time return an error`

```bash
BadMethodCallException
Method Illuminate\Http\JsonResponse::with does not exist.
but normal anchor tag works properly.
```
