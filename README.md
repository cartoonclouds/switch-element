# switch-element
A switch form element (utilising the Laravel Collective [custom component](https://laravelcollective.com/docs/master/html#custom-components) feature to componentise and Bootstrap for themeing).

## Requirements
- [Laravel Framework](https://laravel.com/)
- [Laravel Collective](https://laravelcollective.com/)
- [Bootstrap 4](https://getbootstrap.com/docs/4.0/getting-started/introduction/)

## Installation
1. Add to `AppServiceProvider@boot()` the component definition:

```php
\Form::component('switch', 'templates._switch-partial', ['label', 'value', 'text' => ['Yes', 'No'], 'color' => 'success', 'attributes' => []]);
```

2. Include the **_switch-partial.blade.php** blade file to _/resources/views/templates/_

## Usage
```php
{{ Form::switch(label, value, text, theme, attributes) }}
```

**[string] label**
> The text which will sit next to (generally to the left of) the switch component.

**[string] value**
> This is the value which will be sent on form submission.
> **Important:** The truthiness of the value determines the state of the switch.

**[array] text**
> Must be an array of **two** values - the "on" text and "off" text.
> ie, `['Yes', 'No']`

**[string] theme**
> Determines the colours used on the switch. This value must be one of the available [Bootstrap theme](https://getbootstrap.com/docs/4.0/getting-started/theming/#theme-colors) keywords. (some show better than others!).

|Theme|Hex|
| --- | --- |
|Primary|![#007BFF](https://placehold.it/15/007BFF/000000?text=+) `#007BFF`|
|Secondary|![#FFC107](https://placehold.it/15/FFC107/000000?text=+) `#FFC107`|
|Success|![#17A2B8](https://placehold.it/15/17A2B8/000000?text=+) `#17A2B8`|
|Danger|![#DC3545](https://placehold.it/15/DC3545/000000?text=+) `#DC3545`|
|Warning|![#343A40](https://placehold.it/15/343A40/000000?text=+) `#343A40`|
|Info|![#17A2B8](https://placehold.it/15/17A2B8/000000?text=+) `#17A2B8`|
|Light|![#FFFFFF](https://placehold.it/15/FFFFFF/000000?text=+) `#FFFFFF`|
|Dark|![#000000](https://placehold.it/15/000000/000000?text=+) `#000000`|
(the hex values will differ if you've customised your Bootstrap)

**[array] attributes**
> Any remaining HTML element attributes - these will be added to the form element in the switch. To access/change any other elements which make up the switch use the classes defined below.

### Component Elements
|Element|Class|
| --- | --- |
|Surrounding DIV|`.switch-component`|
|LABEL|`.control-label`|
|INPUT|`.switch-input`|
|Handle|`.switch-hanle`|
|On/off label|`.switch-label`|

## Example
```php
{{ Form::switch('Online Store?', $store->online, ['Yes', 'No'], 'success', ['class' => 'online_class']) }}
```
