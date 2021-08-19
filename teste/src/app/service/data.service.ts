import { Injectable } from '@angular/core';
import { HttpClient } from '../../../node_modules/@angular/common/http';

@Injectable()
export class DataService {

  constructor(private httpClient: HttpClient) { }

  ListarLinguagem (){
    return this.httpClient.get('http://127.0.0.1:8000/api/linguagem');
  }

  getLinguagemId (id:any){
    return this.httpClient.get('http://127.0.0.1:8000/api/linguagem/'+id);
  }

  updateLinguagem (id:any,linguagem:any)
  {
    return this.httpClient.put('http://127.0.0.1:8000/api/linguagem/'+id,linguagem);
  }

  insertLinguagem(linguagem:any){
    return this.httpClient.post('http://127.0.0.1:8000/api/linguagem',linguagem);

  }
  deleteLinguagem(id:any)
  {
    return this.httpClient.delete('http://127.0.0.1:8000/api/linguagem/'+id);
  }

  //Vagas
  ListarVagas (){
    return this.httpClient.get('http://127.0.0.1:8000/api/vaga');
  }

  getVagasId (id:any){
    return this.httpClient.get('http://127.0.0.1:8000/api/vaga/'+id);
  }

  updateVagas (id:any,vagas:any)
  {
    return this.httpClient.put('http://127.0.0.1:8000/api/vaga/'+id,vagas);
  }

  insertVagas(vagas:any){
    return this.httpClient.post('http://127.0.0.1:8000/api/vaga',vagas);

  }

  deleteVagas(id:any)
  {
    return this.httpClient.delete('http://127.0.0.1:8000/api/vaga/'+id);
  }

    //Candidato
    ListarCandidato (){
      return this.httpClient.get('http://127.0.0.1:8000/api/candidato');
    }

    getCandidatoId (id:any){
      return this.httpClient.get('http://127.0.0.1:8000/api/candidato/'+id);
    }

    updateCandidato (id:any,candidato:any)
    {
      return this.httpClient.put('http://127.0.0.1:8000/api/candidato/'+id,candidato);
    }

    insertCandidato(candidato:any){
      return this.httpClient.post('http://127.0.0.1:8000/api/candidato',candidato);

    }

    deleteCandidato(id:any)
    {
      return this.httpClient.delete('http://127.0.0.1:8000/api/candidato/'+id);
    }

}
