<?php
class BankAccount {
    private static $accountNumber = 1000;
    private $accountBalance = 500;

    public function __construct() {
        self::$accountNumber += 1;
    }

    public function withdraw($amount) {
        if ($amount > $this->accountBalance) {
            echo "Insufficient balance";
        } else {
            $this->accountBalance -= $amount;
            echo "Withdrawal successful";
        }
    }

    public function getAccountNumber() {
        return self::$accountNumber;
    }

    public function getAccountBalance() {
        return $this->accountBalance;
    }
}

// Example usage
$account = new BankAccount();
echo "Account Number: " . $account->getAccountNumber() . "<br>";
echo "Account Balance: " . $account->getAccountBalance() . "<br>";

$account->withdraw(100);
echo "<br>Account Balance after withdrawal: " . $account->getAccountBalance();

$account = new BankAccount();
echo "Account Number: " . $account->getAccountNumber() . "<br>";
echo "Account Balance: " . $account->getAccountBalance() . "<br>";
?>