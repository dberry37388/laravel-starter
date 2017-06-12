<?php

/**
 * Creates a new instance and persists
 * the new instance to the database.
 *
 * @param $class
 * @param array $attributes
 * @param null $times
 * @return mixed
 */
function create($class, $attributes = [], $times = null) {
    return factory($class, $times)->create($attributes);
}

/**
 * Creates a new instance but does not
 * save the instance to the database.
 *
 * @param $class
 * @param array $attributes
 * @param null $times
 * @return mixed
 */
function make($class, $attributes = [], $times = null) {
    return factory($class, $times)->make($attributes);
}