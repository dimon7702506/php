<?php
namespace Pagination;
use Couchbase\PasswordAuthenticator;
use Pagination\PaginationInterface\PaginationInterface;
class MyPagination extends PaginationAbstract implements PaginationInterface
{
    protected $links_range = [];
    public function getLinksRange(): array
    {
        //var_dump(PaginationAbstract::getCurrentPage());
        $first_elem = PaginationAbstract::getCurrentPage() * PaginationAbstract::getPerPage();
        var_dump($first_elem);
        echo "<br>";

        $elem_count = PaginationAbstract::getPerPage();
        var_dump($elem_count);

        return $this->links_range;
    }
}