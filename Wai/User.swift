//
//  User.swift
//  Wai
//
//  Created by Admin on 6/04/2016.
//  Copyright © 2016 wtt. All rights reserved.
//

import Foundation

enum Gender {
    case MALE, FEMALE, BOTH, NEITHER, NOT_SURE
}

enum Interest {
    case MEN, WOMEN , EVERYONE
}

struct FullName {
    var first : String = ""
    var last : String = ""
}


class User {
    
    // MARK: Properties
    var id : Int
    var name : FullName
    var birthdate : String
    var location : String?
    var profilePhoto : String
    var gender : Gender
    var interest : Interest
    var age : Int? // Calculated from Birthday.
    
    init(id : Int ,firstName : String, lastName : String, birthdate : String, gender : Gender, interest : Interest){
        self.id = 1
        self.name = FullName()
        self.name.first = firstName
        self.name.last = lastName
        self.birthdate = birthdate
        self.gender = gender
        self.interest = interest
        self.profilePhoto = "default"
    }
    
    

}