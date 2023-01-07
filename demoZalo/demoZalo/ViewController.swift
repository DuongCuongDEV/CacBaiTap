//
//  ViewController.swift
//  demoZalo
//
//  Created by Dương Văn Cường on 02/11/2022.
//

//bước 1: import messageKit
//bước 2: thêm vào class ViewController MessagesViewController, MessagesDataSource, MessagesLayoutDelegate, MessagesDisplayDelegate

import UIKit
import MessageKit
import InputBarAccessoryView

class ViewController: MessagesViewController, MessagesDataSource, MessagesLayoutDelegate, MessagesDisplayDelegate, InputBarAccessoryViewDelegate {
    
    
    
    var message : [ChatMessage] = []
    
    let cuongSender = Sender(senderId: "cuongdv", displayName: "Duong van cuong");
    let kienSender = Sender(senderId: "kiendv", displayName: "Duong van kien");


    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view.
        messagesCollectionView.messagesDataSource = self
        messagesCollectionView.messagesDisplayDelegate = self
        messagesCollectionView.messagesLayoutDelegate = self
        messageInputBar.delegate = self
    }

    func inputBar(_ inputBar: InputBarAccessoryView, didPressSendButtonWith text: String) {
        var chatNews = ChatMessage(sender: kienSender, messageId: "1", sentDate: Date(), kind: .text(inputBar.inputTextView.text))
        message.append(chatNews)
        messagesCollectionView.reloadData()
        inputBar.inputTextView.text = ""
        print(chatNews)
    }
    
    
    
    
    var currentSender: SenderType{
        return cuongSender
    }
    
    func numberOfSections(in messagesCollectionView: MessagesCollectionView) -> Int {
        return message.count
    }
    
    func messageForItem(at indexPath: IndexPath, in messagesCollectionView: MessagesCollectionView) -> MessageType {
        return message[indexPath.section]
    }

}


public struct Sender: SenderType{
    public let senderId: String
    
    public var displayName: String
    
    
}

public struct ChatMessage: MessageType{
    public var sender: SenderType
    
    public let messageId: String
    
    public var sentDate: Date
    
    public var kind: MessageKind
    
    
}
