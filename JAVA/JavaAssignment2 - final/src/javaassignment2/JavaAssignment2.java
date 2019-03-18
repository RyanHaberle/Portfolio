/*  Patrick Murphy  101103097
    Ryan Haberle    101094993  */

package javaassignment2;

import javafx.application.*;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.scene.*;
import javafx.stage.*;
import javafx.scene.layout.*;
import javafx.scene.control.*;

public class JavaAssignment2 extends Application implements EventHandler<ActionEvent>{
    Stage window;  // represents main Stage globally
    private  Scene home,addScene,depositScene,withdrawScene,listScene,transferScene;
    Button btnAddMenu,btnDepositMenu,btnWithdrawMenu,btnTransferMenu,btnListMenu,btnAdd,
           btnHome,btnListHome,btnDeposit,btnWithdraw,btnTransfer,btnDepositHome,
            btnWithdrawHome,btnTransferHome;
    TextField custName,custAccNum,custBalance,withdrawAmount,depositAmount,
              transferAmount,custAccNumDeposit,custAccNumWithdraw,custAccNumTransferFrom,
              custAccNumTransferTo;
    TextArea accountList;
    @Override
    public void init(){
        System.out.println("Application started.");
    }
    @Override
    public void start(Stage primaryStage){
        window = primaryStage;
        // setting up Home Scene
        Label lblHomeMenu = new Label("Welcome to Trusty Bank. We're trusty. We swear!\n"
                            + "Please select an option from below");
        btnAddMenu = new Button("Add");
        btnAddMenu.setOnAction(this);
        btnAddMenu.setMaxWidth(Double.MAX_VALUE);
        btnDepositMenu = new Button("Deposit");
        btnDepositMenu.setOnAction(this);
        btnDepositMenu.setMaxWidth(Double.MAX_VALUE);
        btnWithdrawMenu = new Button("Withdraw");
        btnWithdrawMenu.setOnAction(this);
        btnWithdrawMenu.setMaxWidth(Double.MAX_VALUE);
        btnTransferMenu = new Button("Transfer");
        btnTransferMenu.setOnAction(this);
        btnTransferMenu.setMaxWidth(Double.MAX_VALUE);
        btnListMenu = new Button("List");
        btnListMenu.setOnAction(this);
        btnListMenu.setMaxWidth(Double.MAX_VALUE);
        VBox homeLayout = new VBox();
        homeLayout.setAlignment(Pos.CENTER);
        homeLayout.getChildren().addAll(lblHomeMenu,btnAddMenu,btnDepositMenu,
                                 btnWithdrawMenu,btnTransferMenu,btnListMenu);
        home = new Scene(homeLayout,500,500);
        
        // setting up Add Scene
        Label lblName =new Label("Name:");
        custName = new TextField();
        Label lblAccNum =new Label("Account#:");
        custAccNum=new TextField();
        Label lblBalance =new Label("Balance:");
        custBalance = new TextField();
        btnAdd = new Button("Add Account");
        btnAdd.setOnAction(this);
        btnHome = new Button("Back");
        btnHome.setOnAction(this);
        VBox addLayout =new VBox();
        addLayout.getChildren().addAll(lblName,custName,lblAccNum,custAccNum,
                                lblBalance,custBalance,btnAdd,btnHome);
        addScene = new Scene(addLayout,500,500);
        
        // setting up Deposit Scene
        Label lblAccNumDeposit=new Label("Account#:");
        custAccNumDeposit=new TextField();
        Label lblDepositAmount=new Label("Deposit Amount:");
        depositAmount=new TextField();
        btnDeposit = new Button("Deposit");
        btnDeposit.setOnAction(this);
        btnDepositHome = new Button("Back");
        btnDepositHome.setOnAction(this);
        VBox depositLayout =new VBox();
        depositLayout.getChildren().addAll(lblAccNumDeposit,custAccNumDeposit,lblDepositAmount,
                                    depositAmount,btnDeposit,btnDepositHome);
        depositScene = new Scene(depositLayout,500,500);
        
        // setting up Withdraw Scene
        Label lblAccNumWithdraw=new Label("Account#:");
        custAccNumWithdraw=new TextField();
        Label lblWithdrawAmount=new Label("Withdrawal Amount:");
        withdrawAmount=new TextField();
        btnWithdraw = new Button("Withdraw");
        btnWithdraw.setOnAction(this);
        btnWithdrawHome = new Button("Back");
        btnWithdrawHome.setOnAction(this);
        VBox withdrawLayout =new VBox();
        withdrawLayout.getChildren().addAll(lblAccNumWithdraw,custAccNumWithdraw,lblWithdrawAmount,
                                    withdrawAmount,btnWithdraw,btnWithdrawHome);
        withdrawScene = new Scene(withdrawLayout,500,500);
        
        // setting up List Scene
        Label lblShow = new Label("List of accounts...");
        accountList = new TextArea();
        btnListHome = new Button("Back");
        btnListHome.setOnAction(this);
        btnListHome.setMaxWidth(Double.MAX_VALUE);
        VBox listLayout =new VBox();
        listLayout.getChildren().addAll(lblShow,accountList,btnListHome);
        listScene = new Scene(listLayout,500,500);
        
        // setting up Transfer Scene
        Label lblCustAccNumTransferFrom=new Label("From Account#:");
        custAccNumTransferFrom=new TextField();
        Label lblCustAccNumTransferTo=new Label("To Account#:");
        custAccNumTransferTo=new TextField();
        Label lblTransferAmount=new Label("Transfer Amount:");
        transferAmount=new TextField();
        btnTransfer = new Button("Transfer");
        btnTransfer.setOnAction(this);
        btnTransferHome = new Button("Back");
        btnTransferHome.setOnAction(this);
        VBox transferLayout =new VBox();
        transferLayout.getChildren().addAll(lblCustAccNumTransferFrom,custAccNumTransferFrom,
                lblCustAccNumTransferTo,custAccNumTransferTo,lblTransferAmount,transferAmount,
                btnTransfer,btnTransferHome);
        transferScene = new Scene(transferLayout,500,500);
         
        window.setScene(home);
        window.show();
    }
    @Override
    public void stop(){
        System.out.println("Application terminated.");
    }
    
    @Override
    public void handle(ActionEvent e){
        if(e.getSource()==btnAddMenu){
            System.out.println("add Menu btn pressed (on menu scene)");
            window.setScene(addScene);
        }
        if(e.getSource()==btnListMenu){
            System.out.println("list accounts btn pressed (on menu scene)");
            window.setScene(listScene);
            accountList.setText(Bank.printAccounts());
        }
        if(e.getSource()==btnHome||e.getSource()==btnListHome||e.getSource()==btnDepositHome
                ||e.getSource()==btnWithdrawHome||e.getSource()==btnTransferHome){
            System.out.println("home button has been pressed");
            window.setScene(home);
        }
        if(e.getSource()==btnDepositMenu){
            System.out.println("deposit Menu btn pressed (on menu scene)");
            window.setScene(depositScene);
        }
        if(e.getSource()==btnWithdrawMenu){
            System.out.println("withdraw Menu btn pressed (on menu scene)");
            window.setScene(withdrawScene);
        }
        if(e.getSource()==btnTransferMenu){
            System.out.println("transfer Menu btn pressed (on menu scene)");
            window.setScene(transferScene);
        }
        
        if(e.getSource()==btnAdd){
            System.out.println("add account button pressed");
            long addAccNum=Long.valueOf(custAccNum.getText());
            double addBalance=Double.valueOf(custBalance.getText());
            String addName=String.valueOf(custName.getText());
            Bank.addAccount(addAccNum,addBalance,addName);
            window.setScene(addScene);
        }
        if(e.getSource()==btnDeposit){
            System.out.println("deposit button pressed");
            long depositAccNum=Long.valueOf(custAccNumDeposit.getText());
            double custDepositAmount=Double.valueOf(depositAmount.getText());
            Bank.depositAccount(depositAccNum,custDepositAmount);
            window.setScene(depositScene);
        }
        if(e.getSource()==btnWithdraw){
            System.out.println("withdraw button pressed");
            long withdrawAccNum=Long.valueOf(custAccNumWithdraw.getText());
            double custWithdrawAmount=Double.valueOf(withdrawAmount.getText());
            Bank.withdrawAccount(withdrawAccNum,custWithdrawAmount);
            window.setScene(withdrawScene);
        }
        if(e.getSource()==btnTransfer){
            System.out.println("transfer button pressed");
            long accNumFrom=Long.valueOf(custAccNumTransferFrom.getText());
            long accNumTo=Long.valueOf(custAccNumTransferTo.getText());
            double custTransferAmount=Double.valueOf(transferAmount.getText());
            Bank.transfer(accNumFrom,accNumTo,custTransferAmount);
            window.setScene(transferScene);
        }
    }
    
    public static void main(String[] args) {
        launch(args);
    }
}