from django.shortcuts import render
from django.http import HttpResponse
from django.contrib.auth.models import User, UserManager
from django.contrib.auth import get_user_model
from django.http import HttpResponseRedirect, HttpResponse
from django.core.urlresolvers import reverse
from serveur.models import Utilisateur, Selection


# Create your views here.
def index(request):
    return render(request, 'serveur/index.html', {})

def search(request, id):
    act = Selection.objects.get(nom__exact==id)
    sel1 = Selection.objects.get(nom__exact==act.choix1)
    sel2 = Selection.objects.get(nom__exact==act.choix2)
    sel3 = Selection.objects.get(nom__exact==act.choix3)
    sel4 = Selection.objects.get(nom__exact==act.choix4)
    return render(request, 'serveur/search.html', {id:id, vendeur:vendeur, sel1:sel1, sel2:sel2, sel3:sel3, sel4:sel4})

def user_crea(request):
    passw = request.POST['pass']
    name = request.POST['pseudo']
    if (passw == request.POST['pass_conf'] and len(passw)>=6):
        get_user_model().objects.create_user(name, request.POST['mail'], passw)
        return HttpResponseRedirect(reverse('serveur:index'))
    else:
        return render(request, 'serveur/inscription.html', {
            'erreur_message': "Echec de l'inscription!",
        })
            
def inscription(request):
    return render(request, 'serveur/inscription.html', {})

def login(request):
    return render(request, 'serveur/login.html', {}) 

def logingin(request):
    userAct = User.objects.get(username__exact=request.POST['pseudo'])
    if(userAct.password == request.POST['pass']):
        return HttpResponseRedirect(reverse('serveur:index'))
    else:
        return render(request, 'serveur/inscription.html', {
            'erreur_message': "Echec de l'authentification!",
        })

    

