<?php

namespace Jenky\TelescopeElasticsearch\Contracts;

interface Installer
{
    /**
     * Install.
     *
     * @return void
     */
    public function install();

    /**
     * Uninstall.
     *
     * @return void
     */
    public function uninstall();

    /**
     * Get the index name.
     *
     * @return string
     */
    public function indexName();
}