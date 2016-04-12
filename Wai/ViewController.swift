//
//  ViewController.swift
//  Wai
//
//  Created by TAIMUR KHAWARI on 6/04/2016.
//  Copyright © 2016 wtt. All rights reserved.
//

// Need to implement
import UIKit

var accounts  = [Account(id: 1,username: "wallid",password: "password",email: "email",type: AccountType.USER),Account(id: 2,username: "wallid1",password: "password",email: "email",type: AccountType.USER),Account(id: 3,username: "wallid2",password: "password",email: "email",type: AccountType.USER)]

class ViewController: UIViewController ,  UITextFieldDelegate {

    var accountFound = false
    var quizViewController: UIPageViewController!
    
    @IBOutlet weak var nameTextField: UITextField!
    @IBOutlet weak var passwordTextField: UITextField!
     
    
    override func viewDidLoad() {
        super.viewDidLoad()
        self.nameTextField.delegate = self
        self.passwordTextField.delegate = self
        
        
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    
    // Valdiate User Login
    @IBAction func signIn(sender: UIButton) {
        let username = nameTextField.text
        let password = passwordTextField.text
        print("check")
        for account in accounts{
            print("inside, checking!")
            if account.validateLogin(username!, password: password!){
                accountFound = true
                print("found user!")
            }
        }
    }
    
    // Dismiss Keyboard
    func textFieldShouldReturn(textField: UITextField) -> Bool {
        textField.resignFirstResponder()
        return true;
    }

}

