//
//  ViewController.swift
//  hocLaiAPI
//
//  Created by Dương Văn Cường on 15/11/2022.
//

import UIKit
import Alamofire
import Kingfisher

class ViewController: UIViewController, UITableViewDelegate, UITableViewDataSource {
    
    

    @IBOutlet weak var tblView: UITableView!
    
    var friends:[FriendElement]  = []
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view.
        tblView.delegate = self
        tblView.dataSource = self
        tblView.register(UINib(nibName: "TableViewCell", bundle: nil), forCellReuseIdentifier: "TableViewCell")
        
        getFriends()
    }
    
    
    func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return friends.count
    }
    
    func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        let cell = tblView.dequeueReusableCell(withIdentifier: "TableViewCell", for: indexPath) as! TableViewCell
        
        let currentFriend = friends[indexPath.row]
        
        let avatar = URL(string: currentFriend.avatar)
        cell.imgAvatar.kf.setImage(with: avatar)
        cell.btnDelete.addTarget(self, action: #selector(deleteFriend(_:)), for: .touchUpInside)
        cell.btnDelete.tag = indexPath.row
        
        cell.lblName.text = currentFriend.name
        
        
        return cell
    }
    
    func tableView(_ tableView: UITableView, heightForRowAt indexPath: IndexPath) -> CGFloat {
        return 150
    }
    
    
    
    @objc func deleteFriend(_ sender: UIButton) {
        print("id:\(friends[sender.tag].id)")
        deleteFriend(_id: friends[sender.tag].id)
        friends.remove(at: sender.tag)
        self.tblView.reloadData()
    }
    
    
    
    func deleteFriend(_id: String){
            AF.request("https://632c7f491aabd837399d7c73.mockapi.io/Friends/\(_id)", method: .delete).responseDecodable(of: Friends.self) { response in
            }
    }
    
    
    
    
    func getFriends() {
        AF.request("https://632c7f491aabd837399d7c73.mockapi.io/Friends", method: .get).responseDecodable(of: Friends.self) { (response) in
            
            if let friendsResponse = response.value {
                self.friends = friendsResponse
                self.tblView.reloadData()
                print("Thanh cong")
            } else {
                print("Khong thanh cong")
            }
        }
    }
}

