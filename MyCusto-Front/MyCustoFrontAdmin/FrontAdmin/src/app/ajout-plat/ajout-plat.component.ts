import { Component, OnInit } from '@angular/core';
import { ServicesService } from '../services.service';
import { NgForm } from '@angular/forms';
import { MatSnackBar } from '@angular/material/snack-bar';

@Component({
  selector: 'app-ajout-plat',
  templateUrl: './ajout-plat.component.html',
  styleUrls: ['./ajout-plat.component.scss']
})
export class AjoutPlatComponent implements OnInit {

 
  nom_plat:any;


  photo: File | any;
  message: any;
  imagePath: any;
  imgURL: any;

  constructor(private service :ServicesService, private snackbar: MatSnackBar) { }


  ngOnInit(): void {
  }

  lirephoto(file: any){
    this.photo = file
  }

  
  


  ajoutPlat(dataplat: NgForm){
    //console.log(dataplat.value);
    this.service.AjoutPlat(dataplat,this.photo[0]).subscribe((data: any) =>{
    data.nom_plat = dataplat.value['nom_plat']
    data.description = dataplat.value['description']
    data.prix_plat = dataplat.value['prix_plat']
    
    this.service.ModifPlat(data.id_plat, data).subscribe((dt:any) =>{

      this.snackbar.open('ok succès','X', {
                  duration: 3000
                });
                dataplat.reset();
    })
    
    
      
    })
   
  }

  }

