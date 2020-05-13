<?php

namespace Statamic\Addons\AddClasses;

use Statamic\Extend\Modifier;

class AddClassesModifier extends Modifier
{
    /**
     * Modify a value
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        $result = $value;

        for ($i = 0; $i < count($params); $i+=2)
        {
            if (isset($params[$i+1]))
            {
                $result = str_replace('<'.$params[$i], '<'.$params[$i].' class="'.$params[$i+1].'"', $result);
            }
        }

        return $result;
    }
}