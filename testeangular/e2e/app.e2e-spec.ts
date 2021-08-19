import { TesteangularPage } from './app.po';

describe('testeangular App', function() {
  let page: TesteangularPage;

  beforeEach(() => {
    page = new TesteangularPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
