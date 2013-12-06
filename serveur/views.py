from django.shortcuts import render
from django.http import HttpResponse
from django.contrib.auth.models import User, UserManager
from django.contrib.auth import get_user_model
from django.http import HttpResponseRedirect, HttpResponse
from django.core.urlresolvers import reverse
from serveur.models import Utilisateur


# Create your views here.
def index(request):
    return render(request, 'serveur/index.html', {})

def search(request, id):
    return HttpResponse("search item %s." % id)

def user_crea(request):
    passw = request.POST['pass']
    name = request.POST['pseudo']
    if (passw == request.POST['pass_conf'] and len(passw)>=6):
        get_user_model().objects.create_user(name, request.POST['mail'], passw)
        return HttpResponseRedirect(reverse('serveur:index'))
    else:
        return render(request, 'serveur/inscription.html', {
            'error_message': "Echec de l'inscription!",
        })
            
def inscription(request):
    return render(request, 'serveur/inscription.html', {})

def login(request):
    return render(request, 'serveur/login.html', {}) 

def logingin(request):
    user = User.objects.get(username__exact=request.POST['pseudo']
    if(user.password == request.POST['pass']):
        return HttpResponseRedirect(reverse('serveur:index'))
    else:
        return render(request, 'serveur/login.html', {
            'error_message': "Echec de l'authentification!",
        })
