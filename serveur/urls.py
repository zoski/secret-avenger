from django.conf.urls import patterns, url

from serveur import views

urlpatterns = patterns('',
    url(r'^$', views.index, name='index'),
    url(r'^(?P<id>\d+)/search/$', views.search, name='index'),               
)
