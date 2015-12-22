<?php
/**
 * Copyright (c) Enalean, 2015. All Rights Reserved.
 *
 * This file is a part of Tuleap.
 *
 * Tuleap is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Tuleap is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tuleap; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

class PaginatedPHPWikiPagesFactory {

    /** @var PHPWikiDao */
    private $dao;

    public function __construct(PHPWikiDao $dao) {
        $this->dao = $dao;
    }

    /** @return PaginatedWikiPages */
    public function getPaginatedUserPages(PFUser $user, $project_id, $limit, $offset, $pagename) {
        $pages = array();

        if ($pagename !== '') {
            $row_pages = $this->dao->searchPaginatedUserWikiPagesByPagename(
                $project_id,
                $limit,
                $offset,
                $pagename
            );
        } else {
            $row_pages = $this->dao->searchPaginatedUserWikiPages(
                $project_id,
                $limit,
                $offset
            );
        }

        foreach ($row_pages as $page) {
            $wiki_page = new PHPWikiPage($project_id, $page['pagename']);

            if ($wiki_page->isAutorized($user->getId())) {
                $pages[] = $wiki_page;
            }

        }

        return new PaginatedPHPWikiPages($pages);
    }
}