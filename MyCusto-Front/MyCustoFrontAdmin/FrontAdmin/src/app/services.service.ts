import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ServicesService {

  apiPlat= 'http://localhost:8080/mycustoapi/plat/';
  apiimage= 'http://localhost:8080/mycustoapi/plat/imageplat/';
  

  constructor(private http: HttpClient) { }



  ListePlat() {
    return this.http.get(this.apiPlat+'listePlat');
  }

  AjoutPlat(plat:any,photo:File){
    const forms: FormData = new FormData();
    forms.append("image", photo)
    return this.http.post(this.apiPlat+'ajoutplat',forms);   
  }


  RecupererParId(id:any)
  {
    return this.http.get(this.apiPlat+'platById/'+id);
  }

  ModifPlat(id:any,platmodif:any){
    return this.http.put(this.apiPlat+'modifierPlat/'+id, platmodif);
  }

  SupprimerPlat(id:any){
    return this.http.delete(this.apiPlat+'supprimerPlat/'+id);
  }

  



}
