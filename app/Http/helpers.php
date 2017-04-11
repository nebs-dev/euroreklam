<?php

/**
 * Return nav-here if current path begins with this path.
 *
 * @param string $path
 * @return string
 */
function activeClass($path)
{
    return Request::is($path . '*') ? 'current-menu-item' :  '';
}

/**
 * Truncate string
 *
 * @param $string
 * @param $max_length
 * @return string
 */
function string_truncate($string, $max_length)
{
    $string = trim($string);
    
    if(strlen($string) > $max_length) {
        $string = wordwrap($string, $max_length);
        $string = explode("\n", $string, 2);
        $string = $string[0] . '...';
    }

    return $string;    
}

/**
 * @param null $title
 * @param null $message
 * @return \Illuminate\Foundation\Application|mixed
 */
function flash($title = null, $message = null) {
    $flash = app('App\Http\Flash');

    if (func_num_args() == 0) {
        return $flash;
    }

    return $flash->info($title, $message);
}

function delete_link($path, $class = null, $form_class = null) {
    $csrf = csrf_field();

    return <<<EOT

<form method="POST" action="{$path}" class="form-inline {$form_class}">
    $csrf
    <input type="hidden" name="_method" value="DELETE">
    <button class="btn btn-danger {$class}" type="submit">Delete</button>
</form>

EOT;
}

/**
 * @param $body
 * @param $path
 * @param $type
 * @return string
 */
function link_to($body, $path, $type) {
    $csrf = csrf_field();

    if (is_object($path)) {
        $action = '/' . $path->getTable();

        if (in_array($type, ['PUT', 'PATCH', 'DELETE'])) {
            $action .= '/' . $path->getKey();
        }
    } else {
        $action = $path;
    }

    return <<<EOT

<form method="POST" action="{$action}">
    $csrf
    <input type="hidden" name="_method" value="{$type}">
    <button type="submit">{$body}</button>
</form>

EOT;

}

/**
 * @param $items
 * @return string
 */
function table_results_num($items) {
    $first_result = ($items->currentPage() - 1) * $items->perPage() + 1;
    $total = $items->total();
    $lrn = $items->currentPage() * $items->perPage();
    $last_result = ($lrn > $total) ? $total : $lrn;

    return <<<EOT
        Showing {$first_result} to {$last_result} of {$total} entries
EOT;
}