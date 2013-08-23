<?php
function foo($mode = null) {
    try {
        echo '-----------'.PHP_EOL;
        echo 'try';
        if ($mode === 1) {
            throw new \Exception();
        } else if ($mode === 2) {
            echo ' return';
            return;
        }
    } catch (\Exception $e) {
        echo ' catch';
    } finally {
        echo ' finally'.PHP_EOL;
    }
}

foo(); // try finally
foo(1); // try catch finally
foo(2); // try return finally
