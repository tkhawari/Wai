//
//  QuestionViewController.swift
//  Wai
//
//  Created by Thinh Tran on 11/04/2016.
//  Copyright © 2016 wtt. All rights reserved.
//

import UIKit

class QuestionViewController: UIViewController {

    @IBOutlet weak var Question: UILabel!
    @IBOutlet weak var Ans1: UIButton!
    @IBOutlet weak var Ans2: UIButton!
    @IBOutlet weak var Ans3: UIButton!
    override func viewDidLoad() {
        super.viewDidLoad()

        // Do any additional setup after loading the view.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    func randomQuestion(){
        var ranNo = arc4random() % 3
        ranNo += 1
        
        switch (ranNo){
            
        case 1:
            break
            
        case 2:
            break
            
        case 3:
            break
            
        default:
            break
        
        }
    }
    
    @IBAction func Ans1Action(sender: AnyObject) {
    }
    @IBAction func Ans2Action(sender: AnyObject) {
    }
    @IBAction func Ans3Action(sender: AnyObject) {
    }
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}
