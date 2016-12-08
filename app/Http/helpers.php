<?php

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