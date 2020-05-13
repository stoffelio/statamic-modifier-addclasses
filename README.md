# AddClasses modifier for Statamic (v2)

Adds a modifier to Statamic that allows you to quickly add classes to multiple HTML elements on output.

## Installation

1. Move and rename the `statamic-modifier-addclasses` folder to `site/addons/AddClasses`
2. `cd` into your site's directory and run `php please update:addons`, or refresh the addons using the control panel

## Usage

The modifier accepts any (even) number of parameters, follwing the pattern `element1:class1:element2:class2`

Multiple classes for an element are possible by breaking them up with a single space.

The modifier always adds the classes to all instances of the defined element.

Example:

```
{{ main_content | add_classes:h1:main-headline text-red:p:text-bold }}
```

Input:

```
<h1>The headline</h1>
<p>followed by some text</p>
<p>and a little more text</p>
```

Output:

```
<h1 class="main-headline text-red">The headline</h1>
<p class="text-bold">followed by some text</p>
<p class="text-bold">and a little more text</p>
```

## Shortcomings

This modifier was created for a simple use case and just adds the `class` attribute including the 
specified classes via PHP's `string_replace()`. 

It does not check whether there is already a `class` attribute present within the element. In that case 
you will end up with a duplicate attribute, meaning the browser will most likely ignore the previously 
added classes in favor of the newly added ones.