<?php

namespace PortalContracts\Feature\Pagination;

interface WebservicePaginationInterface
{
    public const PAGINATION_TOTAL_COUNT  = 'x-pagination-total-count';
    public const PAGINATION_PAGE_COUNT   = 'x-pagination-page-count';
    public const PAGINATION_CURRENT_PAGE = 'x-pagination-current-page';
    public const PAGINATION_PER_PAGE     = 'x-pagination-per-page';
}
