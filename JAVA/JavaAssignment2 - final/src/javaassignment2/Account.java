/*  Patrick Murphy  101103097
    Ryan Haberle    101094993  */

package javaassignment2;

public class Account {
    private long accountNum;
    protected double balance;
    private String owner;
    
    public Account(long accNum, double bal, String owns){
        accountNum = accNum;
        balance = bal;
        owner = owns;
    }
    
    public long getAccountNumber(){
        return accountNum;
    }
    public double getBalance(){
        return balance;
    }
    public String getOwner(){
        return owner;
    }
    
    public boolean withdraw(double amount){
        if(amount <= balance){
            balance -= amount;
            return true;
        }
        else{
            System.out.println("No withdrawal done.");
            return false;
        }
    }
    public void deposit(double amount){
        balance += amount;
    }
    public boolean transfer(Account acc, double amount){
        if(withdraw(amount)){
            acc.balance += amount;
            return true;
        }
        else{
            System.out.println("No transfer done.");
            return false;
        }
    }
    @Override
    public String toString(){
        String s = "Account Number: " + accountNum + " | Balance: " + 
                String.format("%.2f", balance) + " | Owner: " + owner +"\n";
        return s;
    }
}
