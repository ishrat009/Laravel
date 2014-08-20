<?php

 class StudentControllerTest extends TestCase
 {
     public function testLoadingStudentSayHi()
     {
         $this->call('GET','Student/sayHi');
         $this->assertResponseOk();
     }
 }