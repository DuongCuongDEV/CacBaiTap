////
////  ChatViewController.swift
////  ZaloDemoIOS
////
////  Created by Dương Văn Cường on 08/11/2022.
////
//
//import UIKit
//import MessageKit
//import InputBarAccessoryView
//import CoreLocation
//
//
//
//
//
//
//class ChatViewController: MessagesViewController, MessagesDataSource, MessagesLayoutDelegate, MessagesDisplayDelegate, InputBarAccessoryViewDelegate, UIImagePickerControllerDelegate, UINavigationControllerDelegate, CLLocationManagerDelegate {
//    
//    
////    
////    var message = [ChatMessage]()
////    
////    var senderArray: [Sender] = []
////    
////    var messageUserDefault: [ChatMessage] = []
////    
////    var senderPeson = Sender(senderId: "", displayName: "")
////    
////    let locationMangger = CLLocationManager()
////    
////    var currentLocation: CLLocation?
////    
////    
////    
//    override func viewDidLoad() {
//        super.viewDidLoad()
//        // Do any additional setup after loading the view.
//        messagesCollectionView.messagesDataSource = self
//        messagesCollectionView.messagesDisplayDelegate = self
//        messagesCollectionView.messagesLayoutDelegate = self
//        messageInputBar.delegate = self
////        locationMangger.delegate = self
////        navigationItem.title = senderPeson.displayName
////        locationMangger.distanceFilter = 10
////        locationMangger.desiredAccuracy = kCLLocationAccuracyBest  xác định độ chính xác
////        locationMangger.requestAlwaysAuthorization() uỷ quyền luôn luôn
////        locationMangger.startUpdatingLocation()  bắt đâù cập nhật vị trí
////        
////        if let chatData = (UserDefaults.standard.array(forKey: "chatMessagerList") as? [ChatMessage]){
////            message = chatData
////            print("abc")
////        }
////        
////        
//    }
////    
////    
//    func inputBar(_ inputBar: InputBarAccessoryView, didPressSendButtonWith text: String) {
//        if inputBar.inputTextView.text == "ChiaSeViTri" {
//            let chatMessage = ChatMessage(sender: currentSender, messageId: "1", sentDate: Date(), kind: .location(Location(location: currentLocation! , size: CGSize(width: 200, height: 150))))
//            message.append(chatMessage)
//            
//            
////            UserDefaults.standard.set(try? JSONEncoder().encode(self.message), forKey: "saveData") inputBar.inputTextView.text = ""
//            messagesCollectionView.reloadData()
//        } else{
////            do {
////                let encoder = JSONEncoder()
////                let abc = try encoder.encode(message)
////            } catch {
////
////            }
//            
//            
//            
//            let chatMessage = ChatMessage(sender: currentSender, messageId: "1", sentDate: Date(), kind: .text(inputBar.inputTextView.text))
//            message.append(chatMessage)
//            print(message[0])
////            UserDefaults.standard.set(message, forKey: "chatMessagerList")
//            inputBar.inputTextView.text = ""
//            messagesCollectionView.reloadData()
//        }
//        
//        
//    }
//    
//    func configureAvatarView(_ avatarView: AvatarView, for message: MessageType, at indexPath: IndexPath, in messagesCollectionView: MessagesCollectionView) {
//        if senderPeson.senderId == "1"{
//            avatarView.image = UIImage(named: "anh1")
//        } else {
//            avatarView.image = UIImage(named: "ds")
//        }
//    }
//    
//    
//    var currentSender: SenderType{
//        return senderPeson as SenderType
//    }
//    
//    func numberOfSections(in messagesCollectionView: MessagesCollectionView) -> Int {
//        return message.count
//    }
//    
//    func messageForItem(at indexPath: IndexPath, in messagesCollectionView: MessagesCollectionView) -> MessageType {
//        return message[indexPath.section]
//    }
////    
////    
////    @IBAction func btnPhotto(_ sender: UIBarButtonItem) {
////        let imagePickerVC = UIImagePickerController()
////        imagePickerVC.sourceType = .photoLibrary
////        imagePickerVC.delegate = self
////        present(imagePickerVC, animated: true, completion: nil)
////    }
////    
////    
////    func imagePickerController(_ picker: UIImagePickerController, didFinishPickingMediaWithInfo info: [UIImagePickerController.InfoKey : Any]) {
////        picker.dismiss(animated: true, completion: nil)
////        if let image = info[.originalImage] as? UIImage {
////            let chatMessage = ChatMessage(sender: currentSender, messageId: "1", sentDate: .now, kind: .photo(Media(placeholderImage: image, size: CGSize(width: 200, height: 150))))
////            message.append(chatMessage)
////            messagesCollectionView.reloadData()
////        }
////    }
////    
////    func locationManager(_ manager: CLLocationManager, didUpdateLocations locations: [CLLocation]) {
////        currentLocation = locations.last
////    }
////    
//}
////
////
////public struct Sender: SenderType{
////    public let senderId: String
////    public var displayName: String
////}
////
////public struct ChatMessage: MessageType {
////    public var sender: SenderType
////    
////    public let messageId: String
////    
////    public var sentDate: Date
////    
////    public var kind: MessageKind
////}
////
////
////
////
////struct Media: MediaItem {
////    var url: URL?
////    
////    var image: UIImage?
////    
////    var placeholderImage: UIImage
////    
////    var size: CGSize
////}
////
////
////struct Location: LocationItem {
////    var location: CLLocation
////    var size: CGSize
////}
