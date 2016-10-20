<?php
/*
* This file is part of EC-CUBE
*
* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.
* http://www.lockon.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\CategoryContent\Entity;

/**
 * Class CategoryContent
 * @package Plugin\CategoryContent\Entity
 */
class CategoryContent extends \Eccube\Entity\AbstractEntity
{
    private $id;

    private $content;

    /**
     * getId
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * setId
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * getContent
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * setContent
     *
     * @param text $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}
