/*  Patrick Murphy  101103097
    Ryan Haberle    101094993  */

package javaassignment2;

public class Bank{
    private static final int maxAccount = 10;
    private static final Account[] accountList=new Account[maxAccount];
    private static int numAccounts=0;
    
    public static boolean addAccount(long accNum, double bal, String owns){
        if(numAccounts<maxAccount){
            Account newAccount = new Account(accNum, bal, owns);
        accountList[numAccounts]=newAccount;
        numAccounts++;
        return true;
        }
        else{
            return false;
        }

    }
    public static String printAccounts(){
        String s="";
        
        for(int i=0; i<maxAccount; i++){
            if(accountList[i] != null){
                s+=accountList[i].toString();
            }
        }
        return s;
    }
    public static int findAccount(long accNum){
        for(int i=0; i<maxAccount; i++){
            if(accountList[i].getAccountNumber() == accNum){
                return i;
            }
        }
        System.out.println("Account not found.");
        return -1;
    }
    public static void depositAccount(long accNum, double amount){
        int accountIndex=findAccount(accNum);
        if(accountIndex!=-1){
            accountList[accountIndex].deposit(amount);
        }
    }
    public static boolean withdrawAccount(long accNum, double amount){
        int accountIndex=findAccount(accNum);
        if(accountIndex!=-1){
            accountList[accountIndex].withdraw(amount);
            return true;
        }
        else{
            return false;
        }
    }
    public static boolean transfer(long accNumFrom,long accNumTo,double amount){
        int accountIndexFrom=findAccount(accNumFrom);
        int accountIndexTo=findAccount(accNumTo);
        if(accountIndexFrom!=-1&&accountIndexTo!=-1){
            accountList[accountIndexFrom].transfer(accountList[accountIndexTo],amount);
            return true;
        }
        else{
            return false;
        }
    }
}
