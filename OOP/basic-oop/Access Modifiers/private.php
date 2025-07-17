<?php
class BankAccount {
    private $balance =0;

    public function deposit($amount) {
        $this->balance += $amount;
    }


    public function getBalance() {
        return $this->balance;
    }

   private function info(){ 
        return "This is private function";
    }

    public function display(){ 
        return $this->info();
    }
}

$account = new BankAccount();
$account->deposit(100);
// echo $account->balance; // Error: Cannot access private property
echo $account->getBalance(); // Output: 100
echo $account->display();
echo $account->info();//Error
?>


<?php
// class MyClass {
//     private $secret = "Top Secret";

//     private function getSecret() {
//         return $this->secret;
//     }

//     public function revealSecret() {
//         return $this->getSecret();  // Allowed internally
//     }
// }

// $obj = new MyClass();
// echo $obj->revealSecret(); // Works
// echo $obj->secret;      // Error: Cannot access private property
// echo $obj->getSecret(); // Error: Cannot access private method
?>