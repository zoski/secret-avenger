
from django.db import models
from django.contrib.auth.models import User

# Create your models here.
class Utilisateur(models.Model):
    pseudo = models.ForeignKey(User, unique=True)
    reputation = models.IntegerField(default=0)
    
    def __str__(self):
        return self.pseudo.username

class Offre(models.Model):
    url = models.URLField(max_length=64, blank=False)
    nom = models.CharField(max_length=64)
    description = models.CharField(max_length=10000)
    nom_image = models.CharField(max_length=64)
    prix = models.IntegerField()
    recommandations = models.IntegerField()

    def __str__(self):
        return self.nom
    

class Selection(models.Model):
    nom = models.CharField(max_length=64)
    last = models.BooleanField(default=False)
    choix1 = models.CharField(max_length=64)
    choix2 = models.CharField(max_length=64)
    choix3 = models.CharField(max_length=64)
    choix4 = models.CharField(max_length=64)
    
    def __str__(self):
        return self.nom
    
