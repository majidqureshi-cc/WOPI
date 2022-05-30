<?php

namespace MS\Wopi\Contracts\Concerns;

interface DisableCopy
{
    /**
     * Disables copying from the document in wopi host online backend.
     * Pasting into the document would still be possible. However,
     * it is still possible to do an “internal” cut/copy/paste.
     */
    public function disableCopy(): bool;
}
