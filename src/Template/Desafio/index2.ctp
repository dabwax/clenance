<?php echo $this->Form->create("Participant", ['class' => 'formulario validar-formulario', 'type' => 'file']); ?>

<div class="container">
    <div class="row">

        <div class="col-xs-12 col-sm-12">
            <div class="col-bem-vindo">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-4">

                        <?php echo $this->Html->image("cleanance.png", ["class" => "img-responsive", "style" => "margin: 0 auto;"]) ?>

                        <p>Preencha o formulário abaixo</p>

                            <div class="form-group">
                                <?php echo $this->Form->input("name", ['placeholder' => 'Nome', 'class' => 'form-control required', 'label' => false, 'div' => false]); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $this->Form->input("email", ['placeholder' => 'E-mail', 'class' => 'form-control required email', 'label' => false, 'div' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $this->Form->input("phone", ['placeholder' => 'Telefone', 'class' => 'form-control required phone', 'label' => false, 'div' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="form-group campo-anexo">
                                <?php echo $this->Form->input("attachment", ['class' => 'form-control required', 'label' => false, 'div' => false, 'type' => 'file']); ?>
                            </div>
                            <div class="form-group campo-newsletter">
                                <label class="checkbox" style="font-size: 12px;">
                                    <?php echo $this->Form->input("newsletter", ['type' => 'checkbox', 'label' => false, 'checked' => true]  ); ?> Aceito receber informações de Eau Thermale Avène.
                                </label>
                            </div>
                    </div>

                    <div class="col-lg-8 col-xs-12 col-sm-12">
                        <div class="regulamento2">

                            <div class="regulamento-container">

                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

                        <p style="font-size: 16px; margin-bottom: 0px; text-transform: uppercase; font-weight: bold; color: #0099A8;">1. O Concurso</p>

                    <p style="font-size: 12px;"> 1.1. A promoção Comercial “Eu Amo Cleanance” será promovida pelos Laboratórios Pierre Fabre do Brasil LTDA (neste regulamento denominado simplesmente de Realizadora), sociedade empresarial inscrita no CNPJ/MF: 33.051.491/0001-59, situada à Rodovia BR 040, Km 37, S/N, Alberto Torres Areal – RJ, CEP 25.845-000, de acordo com o artigo 3º, inciso II, da Lei nº 5.768/71, artigo 30, do Decreto nº 70.951/72 e Portaria MF nº 41, de 2008 e n.º 422, de 2013.</p>

                    <p style="font-size: 12px;"> 1.2. Somente serão consideradas aptas as participações de pessoas físicas, residentes e domiciliadas em território nacional brasileiro e maiores de 16 anos, (menores de 18 anos deverão ser assistidos dos representantes legais, caso não sejam emancipados, de acordo com a lei civil).</p>

                    <p style="font-size: 12px;"> 1.3.  O objeto do presente Concurso é a promoção dos produtos da marca de cosméticos Cleanance, mediante a seleção das melhores fotos enviadas pelos usuários/participantes que postarem a foto no hotsite www.euamocleanance.com.br ou postarem a foto no seu instagra usando a hashtag #euamocleanance (desde que o seu perfil seja público),</p>

                    <p style="font-size: 12px;"> 1.4 A participação dos concorrentes será de 06/07/2015 até as 12h do dia 06/08/2015, com divulgação do resultado no dia 13/08/2015, na forma prevista no item 2 e 3 desse Regulamento.</p>


                    </div>

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

                        <p style="font-size: 16px; margin-bottom: 0px; text-transform: uppercase; font-weight: bold; color: #0099A8;"> 2.  Forma de Participação</p>

                        <p style="font-size: 12px;"> 2.1.    O hotsite www.euamocleanance.com.br entrará no ar no dia 06/07/2015 e nele será divulgado a promoção;</p>

                        <p style="font-size: 12px;"> 2.2.    Para garantir a participação, os participantes deverão enviar suas fotos através do hotsite www.euamocleanance.com.br ou postando a foto no seu instagram usando a hashtag #euamocleanance, sendo que o perfil do instagram deve ser público. A participação só será considerada válida se todas as informações contidas forem comprovadamente corretas e verdadeiras, e identificarem uma única pessoa física.</p>

                        <p style="font-size: 12px;"> 2.2.1.  As fotos deverão ser postados até o dia 06/08/2015, às 12:00h. Serão premiados 5 participantes. O Kit Cleanance é composto de 5 itens:</p>

                        <table class="table" style="font-size: 12px;">
                            <thead>
                                <tr>
                                    <th>Descrição dos itens</th>
                                    <th>Quantidade</th>
                                    <th>Valor Unitário</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cleanance Gel 75 mL</td>
                                    <td>1</td>
                                    <td>R$29,90</td>
                                </tr>
                                <tr>
                                    <td>Cleanance Barra 100g</td>
                                    <td>1</td>
                                    <td>R$24,90</td>
                                </tr>
                                <tr>
                                    <td>Cleanance Água 400mL</td>
                                    <td>1</td>
                                    <td>R$77,50</td>
                                </tr>
                                <tr>
                                    <td>Cleanance Emulsão 40mL</td>
                                    <td>1</td>
                                    <td>R$67,90</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Valor total dos prêmios</td>
                                    <td>&nbsp;</td>
                                    <td style="font-weight: bold;">R$260,10</td>
                                </tr>
                            </tbody>
                        </table>

                        <p style="font-size: 12px;">2.2.2.   A foto deve buscar ser criativa e original.</p>

                         <p style="font-size: 12px;">2.2.3.  Caso a foto vencedora seja de um participante menor de idade (acima de 16 anos), o recebimento do prêmio será realizado somente com a assistência dos pais ou responsáveis legais pelo adolescente.</p>

                         <p style="font-size: 12px;">2.2.4.  As fotos ficarão armazenadas, de forma pública no hotsite. Em caso de duplicidade de fotos, somente a primeira será considerada e as demais serão eliminadas. Poderão participar com quantas fotos desejarem.</p>

                         <p style="font-size: 12px;">2.2.5.  Somente serão válidas as fotos enviadas pelo hotsite www.euamocleanance.com.br ou postadas no intagram usando a hashtag #euamocleanance e sendo um perfil público.</p>

                         <p style="font-size: 12px;">2.4.  A participação é voluntária e gratuita, não havendo cobrança de qualquer espécie de taxa e/ou emolumento em quaisquer das fases do Concurso.</p>

                         <p style="font-size: 12px;">2.5. Não poderão participar da promoção os diretores e/ou funcionários dos LABORATÓRIOS PIERRA FABRE DO BRASIL LTDA, os quais, serão automaticamente eliminados do concurso.</p>

                         <p style="font-size: 12px;">2.6. Não serão objetos desta promoção os seguintes itens: medicamentos, armas, munições, explosivos, fogos de artifícios ou estampidos, bebidas alcóolicas, fumo e seus derivados, ou quaisquer outros produtos que venham a ser relacionados pelo Ministério da Fazenda.</p>

                         <p style="font-size: 12px;">2.7. A postagem da foto no hotsite ou no instagram implica na adesão voluntária e integral às condições definidas no Regulamento da promoção, em especial, a anuência na utilização (cessão gratuita e temporária) do uso da imagem e /ou nome dos vencedores, por até 01 (um) ano.</p>

                    </div>

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

                    <p style="font-size: 16px; margin-bottom: 0px; text-transform: uppercase; font-weight: bold; color: #0099A8;"> 3. Premiação e Divulgação de Resultados </p>

                    <p style="font-size: 12px;">3.1.    Para apuração do resultado final será composta uma equipe de 5 (cinco) pessoas, que comporão a comissão julgadora, lideradas pela Sra. Joana Aquino, responsável pelo setor de Marketing da empresa</p>
                    <p style="font-size: 12px;">3.2.    Serão selecionadas as 05 (cinco) melhores frases, postadas no hotsite ou no instagram.</p>

                    <p style="font-size: 12px;">3.3.    Os critérios utilizados para seleção dos vencedores são subjetivos, de acordo com as preferências de cada membro da comissão julgadora, utilizando-se como parâmetros:</p>
                    <p style="font-size: 12px;">a)  Criatividade no contexto de uso;</p>
                    <p style="font-size: 12px;">b)  Um produto da linha Cleanance deve aparecer na foto;</p>

                    <p style="font-size: 12px;">3.4.    Uma comissão formada por funcionários do departamento de marketing da empresa promotora, Pierre Fabre, avaliará as frases entre os dias 07/08/2015 e 10/08/2015, quando selecionará as cinco melhores de acordo com os critérios de julgamento estabelecidos.</p>

                    <p style="font-size: 12px;">3.5.    As fotos selecionadas pela comissão julgadora formada por funcionários do departamento de marketing da empresa realizadora terão a divulgação do resultado final, através do hotsite www.euamocleanance, no Facebook.com/AveneBrasilOficial e no Instagram.com/AveneBrasil, no dia 13/08/2015.</p>

                    <p style="font-size: 12px;">3.6. Todos os prêmios são de ordem pessoal e intransferível, não podendo ser convertidos em dinheiro nem trocados por outro produto.</p>

                    <p style="font-size: 12px;">3.7. Entrega dos prêmios: Os vencedores deverão entrar em contato com o marketing da Pierre Fabre, através do email joana.souza@pierre-fabre.com informando os seus dados para envio do prêmio.</p>

                    <p style="font-size: 12px;">3.8 O prêmio será enviado pelo departamento de marketing da empresa promotora através do serviço SEDEX dos Correios, com aviso de recebimento pelo destinatário. Os vencedores se comprometem a assinar e remeter à realizadora, sem custos, o termo de recebimento dos
                    prêmios. Caso seja mais conveniente às partes, a entrega poderá ser realizada pessoal e diretamente aos vencedores, através de entrega ao portador.</p>

                    <p style="font-size: 12px;">3.9 Na eventualidade do participante contemplado vir a falecer, o prêmio será entregue ao seu herdeiro, que deverá comprovar tal condição. O prêmio será entregue livre e desembaraçado de qualquer ônus para o contemplado.</p>

                    <p style="font-size: 12px;">3.10 . Serão desclassificados todos os participantes que utilizarem de meios fraudulentos, de qualquer espécie, para interferir no resultado da promoção.</p>

                    </div>

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

                    <p style="font-size: 16px; margin-bottom: 0px; text-transform: uppercase; font-weight: bold; color: #0099A8;">4.  Cessão de Direitos</p>

                    <p style="font-size: 12px;">4.1.  Ao confirmar a sua inscrição, e independentemente de premiação ao final do Concurso, o participante cede e transfere à Realizadora, a título não oneroso, o direito de uso da frase enviada na forma dos itens precedentes, podendo utilizar a referida frase em campanhas promocionais, em quaisquer meios, renunciando o participante aos direitos patrimoniais decorrentes da criação de sua frase.</p>

                    <p style="font-size: 12px;">4.2.  Da mesma forma, o participante que confirmar a sua inscrição, e venha a ser um dos 05 ganhadores, concorda em ceder gratuitamente os direitos de uso de sua frase, bem como seu nome e imagem, à Realizadora, para uso exclusivo na divulgação desta promoção e de seus resultados, sem qualquer contrapartida financeira.</p>

                    <p style="font-size: 12px;">4.3. O participante, ao se inscrever na promoção, declara estar ciente de que todos os dados e materiais públicos publicados pelo mesmo diretamente nas mídias sociais estarão sujeitos à interações inerentes à referida mídia, inclusive por outros usuários, não podendo a Promotora ser responsabilizada por uso indevido de terceiro.</p>

                    <p style="font-size: 16px; margin-bottom: 0px; text-transform: uppercase; font-weight: bold; color: #0099A8;">5.  Disposições Gerais</p>

                    <p style="font-size: 12px;">5.1. No ato da inscrição o participante, tem total conhecimento e concordância com os termos deste Regulamento.</p>

                    <p style="font-size: 12px;">5.2. Caberá à Realizadora, através da Sra. Joana Aquino, joana.souza@pierre-fabre.com.br, tel: (21) 3575-8169, dirimir quaisquer dúvidas e controvérsias oriundas de reclamações dos participantes e, caso não sejam solucionadas, deverão ser submetidas à CAIXA ou, conforme o caso, à SEAE/MF.</p>

                    <p style="font-size: 12px;">5.3. Qualquer reclamação deverá ser devidamente fundamentada e encaminhada para o respectivo PROCON da comarca em que o ganhador residir;</p>

                    <p style="font-size: 12px;">5.4.    A empresa Promotora se responsabiliza por seguir todos os termos de uso das redes sociais utilizadas para divulgação da promoção (facebook e instagram).</p>

                    <p style="font-size: 12px;">5.5.    A empresa Promotora declara que garante a segurança, integralidade e disponibilidade dos dados cadastrais e materiais produzidos pelos participantes fora do ambiente das redes sociais utilizadas.</p>

                    <p style="font-size: 12px;">5.6.    A empresa Promotora garante a integralidade e continuidade da promoção até seu término, sem qualquer prejuízo aos participantes, seja a que motivo for.</p>

                    <p style="font-size: 12px;">5.7.    A presente promoção é de inteira responsabilidade da Promotora, não tendo as mídias sociais utilizadas (facebook e instagram) qualquer responsabilidade e/ou envolvimento sobre o conteúdo divulgado;</p>

                    <p style="font-size: 12px;">5.8. Promoção autorizada pela Caixa, CE 2877/2015/CEPCO, protocolo n° 90104.001149/15-63.</p>

                    </div>

                            </div> <!-- .regulamento-container -->
                        </div> <!-- .regulamento -->

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                <div class="form-group campo-termos-de-uso">
                                    <label class="checkbox" style="margin-top: 18px;">
                                        <?php echo $this->Form->input("tos", ['type' => 'checkbox', 'label' => false, 'required' => true]  ); ?> Li e aceito os termos da promoção.
                                    </label>
                                </div>

                            </div> <!-- .col-lg-6 -->
                            <div class="col-lg-5 col-md-5 pull-right col-sm-12 col-xs-12 text-right">
                                <button type="submit" class="btn btn-primary btn-block btn-participe">Próximo</button>
                            </div> <!-- .col-lg-6 -->
                            </div> <!-- .row -->


                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
</div>

<?php echo $this->Form->end(); ?>