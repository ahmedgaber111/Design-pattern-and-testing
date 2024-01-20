<?php

use App\Behavioural\Strategy\Base64Encrypt;
use App\Behavioural\Strategy\EncryptContext;
use App\Behavioural\Strategy\HashEncrypt;
use App\Behavioural\Strategy\Md5Encrypt;
use Tests\TestCase;

class StrategyTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test */
    /**
     * @var EncryptContext
     */
  private EncryptContext$encryptContext;
  private string$encryptdata;
  const TEXT="ENCRYPT_ME";

  protected function setUp(): void
  {
    $this->encryptContext=new EncryptContext(new HashEncrypt());
    $this->encryptdata=$this->encryptContext->encryptString(self::TEXT)[0];
  }

    public function testCanUserHashEncrypt()
    {
       [$data,$type] =$this->encryptContext->encryptString(self::TEXT);
       self::assertEquals($this->encryptdata,$data);
       self::assertEquals(HashEncrypt::TYPE,$type);
    }
    public function testCanUserMd5Encrypt()
    {
         $this->encryptContext->setStrategy(new Md5Encrypt());
        [$data,$type] =$this->encryptContext->encryptString(self::TEXT);
        self::assertNotEquals($this->encryptdata,$data);
        self::assertEquals(Md5Encrypt::TYPE,$type);
    }
    public function testCanUserBase64Encrypt()
    {
        $this->encryptContext->setStrategy(new Base64Encrypt());
        [$data,$type] =$this->encryptContext->encryptString(self::TEXT);
        self::assertNotEquals($this->encryptdata,$data);
        self::assertEquals(Base64Encrypt::TYPE,$type);
    }


}
