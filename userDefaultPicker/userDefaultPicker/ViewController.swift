//
//  ViewController.swift
//  userDefaultPicker
//
//  Created by Thanh Dat on 19/10/2022.
//

import UIKit
//MARK: B1 import thư viện
import CoreLocation

class ViewController: UIViewController, UIImagePickerControllerDelegate, UINavigationControllerDelegate, CLLocationManagerDelegate {
    
    //MARK: B2 tạo 1 đối tượng để quản lí location
    let locationManager = CLLocationManager()

    @IBOutlet weak var lblInfor: UILabel!
    @IBOutlet weak var lblLocation: UILabel!
    
    let defaults = UserDefaults.standard
    
    @IBOutlet weak var imageView: UIImageView!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        saveUserProfile()
        locationManager.delegate = self
        locationManager.distanceFilter = 0.1
        locationManager.desiredAccuracy = kCLLocationAccuracyBest
    }
    
    func saveUserProfile(){
        defaults.set("23/06/2003", forKey: "dateOfBirth")
        defaults.set("Giap van Thanh Dat", forKey: "name")
    }
    
    @IBAction func btnGetData(_ sender: UIButton) {
        getUserProfile()
    }
    
    func getUserProfile() {
        let userName = defaults.string(forKey: "dateOfBirth")
        lblInfor.text = userName
    }
    
    //MARK: chọn ảnh
    @IBAction func btnChoosePickerImage(_ sender: UIButton) {
        //MARK: khởi tạo UIImagePickerController()
        let imgPickerVC = UIImagePickerController()
        //MARK: xet source
        imgPickerVC.sourceType = .photoLibrary
        //MARK: uỷ quyền
        imgPickerVC.delegate = self
        //MARK: present để hiện thị album
        present(imgPickerVC, animated: true, completion: nil)
    }
    

    //MARK: B4 tạo btn để xin cấp quyền location
    @IBAction func btnRequestLocation(_ sender: UIButton) {
        locationManager.requestLocation()
    }
    
    
    //MARK: Sinh ra 3 hàm
    func locationManagerDidChangeAuthorization(_ manager: CLLocationManager) {
      
    }
    func locationManager(_ manager: CLLocationManager, didFailWithError error: Error) {
        print("Eror: \(error.localizedDescription)")
    }
    func locationManager(_ manager: CLLocationManager, didUpdateLocations locations: [CLLocation]) {
        let lastLocation = locations.last
        lblLocation.text = "Vi tri: \(lastLocation!.coordinate.latitude) : \(lastLocation!.coordinate.longitude)"
      
        //dừng sau khi chạy k update
        locationManager.stopUpdatingLocation()
        
    }
    
    
    func imagePickerController(_ picker: UIImagePickerController, didFinishPickingMediaWithInfo info: [UIImagePickerController.InfoKey : Any]) {
        //MARK: sau khi lấy xong phải dismiss để out khỏi album
        picker.dismiss(animated: true, completion: nil)
        
        if let image = info[.originalImage] as? UIImage {
            imageView.image = image
        }
    }
    
   


}

