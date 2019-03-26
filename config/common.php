<?php
/**
 * Escapes HTML for output when submitting and viewing data
 *
 */
function escape($html) {
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}
