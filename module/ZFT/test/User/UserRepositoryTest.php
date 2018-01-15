<?php
/**
 * Created by PhpStorm.
 * User: Shepherd
 * Date: 1/15/2018
 * Time: 3:01 PM
 */

namespace  ZFTTest\User;

use PHPUnit\Framework\TestCase;
use ZFT\User;

class UserRepositoryTest extends TestCase {
    public  function testCanCreateRepositoryObject() {
        $repository = new User\Repository($identityMap, $dataMapper);

        $this->assertInstanceOf(User\Repository::class, $repostory);
    }

}