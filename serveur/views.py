from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def index(request):
    return render(request, 'serveur/index.html', {})

def search(request, id):
    return HttpResponse("search item %s." % id)

def login(request):
    try:
        create_user(request.POST['pseudo'], request.POST['choice'], request.POST['choice'])
        
