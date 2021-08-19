import { ComponentFixture, TestBed } from '@angular/core/testing';

import { LinguagemEditComponent } from './linguagem-edit.component';

describe('LinguagemEditComponent', () => {
  let component: LinguagemEditComponent;
  let fixture: ComponentFixture<LinguagemEditComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ LinguagemEditComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(LinguagemEditComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
