/* This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/. */

<div class="pagination">
<?php
    if ($pager->totalPages > 1) { ?>
        <span class="totalItems"><?= $pager->totalItemCount ?></span> <?= $totalItemText ?></span> Skip to:
  <?php
        echo "<ol>";
        if ($pager->showPrevious) { ?>
            <li class='first'><a href='<?= $navPathPrefix ?><?= $pager->previousPage ?>'><?= $previousLinkText ?></a></li>
  <?php }
        if ($pager->totalPages > 1) {
            for ($i = 1; $i <= $pager->totalPages; $i++) {
                if ($pager->currentPage == $i) { ?>
                  <li class='current'><?= $i ?> </li>
          <?php } else {?>
                  <li><a href="<?= $navPathPrefix ?><?= $i ?>" title="<?= sprintf(_('Go to page %1$s of %2$s'),
                                                             $i, $pager->totalPages) ?>"><?= $i ?></a></li>
          <?php }
            }
        }
        if ($pager->showNext) { ?>
            <li class='last'><a href='<?= $navPathPrefix ?><?= $pager->nextPage ?>'><?= $nextLinkText ?></a>
  <?php }
        echo "</ol>";
    } ?>
</div>
