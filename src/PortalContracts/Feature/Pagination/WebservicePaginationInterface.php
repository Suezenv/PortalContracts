<?php

namespace PortalContracts\Feature\Pagination;

interface WebservicePaginationInterface
{
    public const PAGINATION_TOTAL_COUNT  = 'x-pagination-total-count';
    public const PAGINATION_PAGE_COUNT   = 'x-pagination-page-count';
    public const PAGINATION_CURRENT_PAGE = 'x-pagination-current-page';
    public const PAGINATION_PER_PAGE     = 'x-pagination-per-page';

    public const QUERY_PARAM_CURRENT_PAGE   = 'currentPage';
    public const QUERY_PARAM_ITEMS_PER_PAGE = 'itemsPerPage';

    public const DEFAULT_ITEMS_PER_PAGE = 20;
}
