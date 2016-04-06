//
//  Account.swift
//  Wai
//
//  Created by Admin on 6/04/2016.
//  Copyright © 2016 wtt. All rights reserved.
//

import Foundation

enum AccountType {
    case ADMIN, USER
}


class Account{
    
    var id : Int
    var username : String
    var password : String
    var email : String
    var type : AccountType
    var user : User?
    
    
    init(id : Int, username : String, password : String, email : String, type : AccountType){
        self.id = id
        self.username = username
        self.password = password
        self.email = email
        self.type = type
        // need to assign user once information is given.
    }
    

    func validateLogin(username : String, password : String) -> Bool{
        return self.username == username && self.password == password
    }
    
}