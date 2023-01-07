//
//  ViewController.swift
//  DemoAPINetworkingWithAlamofire
//
//  Created by blackhat on 22/09/2022.
//

import UIKit
import Kingfisher

class ViewController: UIViewController, UITableViewDelegate, UITableViewDataSource {

    @IBOutlet weak var tblFriends: UITableView!
    var friendsData: Friends = []
    //Buoc 1
    var likeDictionary: [Int:Bool] = [:]
    
    let defaults = UserDefaults.standard

    @IBOutlet weak var searchView: UIView!
    override func viewDidLoad() {
        super.viewDidLoad()
        APIHandler.init().createAFriend{ responseData in
            print(responseData)
        }
        tblFriends.delegate = self
        tblFriends.dataSource = self
        tblFriends.register(UINib(nibName: "FriendTableViewCell", bundle: nil), forCellReuseIdentifier: "friendCellIdentifier")
        getFriendsFromAPI()
        
        let swipeUp = UISwipeGestureRecognizer(target: self, action: #selector(handleGesture))
        swipeUp.direction = .up
        self.view.addGestureRecognizer(swipeUp)
        
        let swipeDown = UISwipeGestureRecognizer(target: self, action: #selector(handleGesture))
        swipeDown.direction = .down
        self.view.addGestureRecognizer(swipeDown)
    }
    
    @objc func handleGesture(gesture: UISwipeGestureRecognizer) {
       if gesture.direction == .up {
           let top = CGAffineTransformMakeTranslation(0, -UIScreen.main.bounds.height+300)

           UIView.animate(withDuration: 0.4, delay: 0.0, options: [], animations: {
                 self.searchView.transform = top
           }, completion: nil)
       }
        
        if gesture.direction == .down {
            let top = CGAffineTransformMakeTranslation(0, 10)

            UIView.animate(withDuration: 0.4, delay: 0.0, options: [], animations: {
                  self.searchView.transform = top
            }, completion: nil)
        }
       
    }
    
    func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return friendsData.count
    }
    
    func tableView(_ tableView: UITableView, heightForRowAt indexPath: IndexPath) -> CGFloat {
        return 150
    }
    
    func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        let cell = tblFriends.dequeueReusableCell(withIdentifier: "friendCellIdentifier", for: indexPath) as! FriendTableViewCell
        
        let currentFriend = friendsData[indexPath.row]
        let url = URL(string: currentFriend.avatar)
        cell.imgFriendAvatar.kf.setImage(with: url)
        
        cell.lblFriendName.text = currentFriend.name
        cell.likeButton.tag = indexPath.row
        cell.likeButton.addTarget(self, action: #selector(likeAction(_:)), for: .touchUpInside)
        
        //Buoc 3
        if let isButtonLiked = likeDictionary[indexPath.row] {
            if isButtonLiked {
                cell.likeButton.setImage(UIImage(named: "liked"), for: .normal)
            }
        }
        cell.indexPath = indexPath
        return cell
    }
    
    //Buoc 2
    @objc func likeAction(_ sender: UIButton) {
        if let isButtonLiked = likeDictionary[sender.tag] {
            likeDictionary[sender.tag] = !isButtonLiked
        } else {
            likeDictionary[sender.tag] = true
        }
        tblFriends.reloadData()
    }
    
    func getFriendsFromAPI() {
        let isCalledAPI = defaults.bool(forKey: "calledAPI")
        if !isCalledAPI {
            print("Chua goi API nen can goi lai API")
            
            APIHandler.init().getFriends { friendsResponseData in
                self.friendsData = friendsResponseData
                self.defaults.set(true, forKey: "calledAPI")
                self.tblFriends.reloadData()
            }
        } else {
            print("Da goi API roi khong goi lai nua")
        }
        
    }
    

    @IBAction func sayHello(_ sender: UIButton) {
    }
    
    
}

