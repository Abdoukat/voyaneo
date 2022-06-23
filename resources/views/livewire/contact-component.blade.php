<div class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="tn-left">
                    <li><i class="fa fa-phone"></i> 01.77.69.02.57</li>
                    <li><i class="fa fa-envelope"></i> info.voyaneo@gmail.com</li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Contact</h2>
                    <div class="bt-option">
                        <a href="./home.html">Accueil</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-text">
                    {{-- <h2>Contact Info</h2> --}}
                    <p>Voyaneo.com – est une agence de voyage familiale née en 2012 et dirigée depuis par Roxana, grande
                        passionnée de voyages..</p>
                    <table>
                        <tbody>
                            <tr>
                                <td class="c-o">Addresse:</td>
                                <td>163 avenue Charles de Gaulle 92200 Neuilly sur Seine</td>
                            </tr>
                            <tr>
                                <td class="c-o">telephone:</td>
                                <td>01.77.69.02.57</td>
                            </tr>
                            <tr>
                                <td class="c-o">Email:</td>
                                <td>info@voyaneo.com</td>
                            </tr>
                            {{-- <tr>
                                    <td class="c-o">Fax:</td>
                                    <td>+(12) 345 67890</td>
                                </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="POST" action="{{ url('contact/add') }}" enctype="multipart/form-data"
                    class="form-area contact-form text-right">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Nom" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Nom'" class="common-input mb-20 form-control" required=""
                                type="text">

                            <input name="email" placeholder="Email"
                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email '"
                                class="common-input mb-20 form-control" required="" type="email">

                            <input name="subject" placeholder="Sujet" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter sujet'" class="common-input mb-20 form-control"
                                required="" type="text">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Message" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Votre Message'" required=""></textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button type="submit" class="genric-btn primary" style="float: right;">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2190.3711257898613!2d2.2619515744481378!3d48.88336893121048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6656ecbd7ceaf%3A0xebc3cf29483854a7!2s163%20Av.%20Charles%20de%20Gaulle%2C%2092200%20Neuilly-sur-Seine!5e0!3m2!1sfr!2sfr!4v1652971854787!5m2!1sfr!2sfr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- Contact Section End -->
