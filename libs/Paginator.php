<?php

class Paginator
{
  public function paginate($orderBy, $model)
  {
    $order = isset($_GET['order'])? $_GET['order'] : $orderBy[0];
    $orderDir = !empty($_GET['orderDir']) ? $_GET['orderDir'] : $orderBy[1];
    $itemsCount = $model->count();
    $pagesCount = ceil($itemsCount / ITEMS_PER_PAGE);
    $page = isset($_GET['page']) && $_GET['page'] > 0 ? $_GET['page'] : 1;
    $sorting = (isset($_GET['order']) && isset($_GET['orderDir'])) ? "&order=$order&orderDir=$orderDir" : false;
    $model->selectTable($model->useTable);
    $startPage = (($page - PAGE_DIS_PER_RANGE) < 1) ? 1 : $page - PAGE_DIS_PER_RANGE;
    $endPage = (($page + PAGE_DIS_PER_RANGE) > $pagesCount) ? $pagesCount : $page + PAGE_DIS_PER_RANGE;
    $maxAllowedPage = $page > $pagesCount ? $pagesCount : $page;
    $offset = ($maxAllowedPage - 1) * ITEMS_PER_PAGE;

    $data['params'] = array(
      'currentPage' => $page,
      'startPage'   => $startPage,
      'pagesCount'  => $pagesCount,
      'sorting'     => $sorting,
      'endPage'     => $endPage,
      'offset'      => $offset,
      'order'       => $order,
      'orderDir'    => $orderDir
    );

    $data['paginatedData'] = $model->select('*', false, $order .' '. $orderDir, ITEMS_PER_PAGE, $offset);

    return $data;
  }
}